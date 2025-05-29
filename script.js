let tasks = [];

// Function to show/hide loader
function toggleLoader(show) {
    const loader = document.getElementById('loaderContainer');
    const table = document.getElementById('taskTable');
    
    if (show) {
        loader.style.display = 'block';
        table.classList.add('table-fade');
    } else {
        loader.style.display = 'none';
        table.classList.remove('table-fade');
    }
}

// Function to fetch and update data
async function fetchAndUpdateData() {
    try {
        toggleLoader(true); // Show loader before fetching
        const response = await fetch('api.php');
        const data = await response.json();
        tasks = data;
        updateTable(tasks);
    } catch (error) {
        console.error('Error fetching data:', error);
    } finally {
        toggleLoader(false); // Hide loader after fetching
    }
}

// Function to update the table with data
function updateTable(data) {
    const tableBody = document.getElementById('taskTableBody');
    tableBody.innerHTML = '';

    data.forEach(task => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${task.task || ''}</td>
            <td>${task.title || ''}</td>
            <td>${task.description || ''}</td>
            <td>
                <div class="color-box" style="background-color: ${task.colorCode || '#ffffff'}"></div>
            </td>
        `;
        tableBody.appendChild(row);
    });
}

// Function to filter data based on search input
function filterData(searchTerm) {
    const filteredTasks = tasks.filter(task => {
        const searchString = searchTerm.toLowerCase();
        return (
            (task.task && task.task.toLowerCase().includes(searchString)) ||
            (task.title && task.title.toLowerCase().includes(searchString)) ||
            (task.description && task.description.toLowerCase().includes(searchString))
        );
    });
    updateTable(filteredTasks);
}

// Set up event listeners
document.addEventListener('DOMContentLoaded', () => {
    // Initial data fetch
    fetchAndUpdateData();

    // Set up search functionality
    const searchInput = document.getElementById('searchInput');
    searchInput.addEventListener('input', (e) => {
        filterData(e.target.value);
    });

    // Set up image preview
    const imageInput = document.getElementById('imageInput');
    const previewImg = document.getElementById('previewImg');

    imageInput.addEventListener('change', (e) => {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = (e) => {
                previewImg.src = e.target.result;
                previewImg.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    });

    // Set up auto-refresh every 60 minutes
    setInterval(fetchAndUpdateData, 60 * 60 * 1000);
}); 