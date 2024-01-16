document.addEventListener('DOMContentLoaded', function () {
    loadStaffData();
});

function loadStaffData() {
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                const staffData = JSON.parse(xhr.responseText);
                populateTable(staffData);
            } else {
                console.error('Error fetching data');
            }
        }
    };

    xhr.open('GET', 'getStaffData.php', true);
    xhr.send();
}

function populateTable(data) {
    const tableBody = document.querySelector('#staffTable tbody');
    tableBody.innerHTML = '';

    data.forEach(function (staff) {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${staff.id}</td>
            <td>${staff.first_name}</td>
            <td>${staff.email}</td>
            <td>${staff.phone}</td>
            <td>${staff.address}</td>
            <td>${staff.gender}</td>
            <td>${staff.department}</td>
            <td>${staff.specialization}</td>
            <td><button onclick="performAction(${staff.id})">View</button></td>
        `;
        tableBody.appendChild(row);
    });
}

function performAction(id) {
    // Add your logic for the action (e.g., view details) here
    console.log(`Performing action for staff ID ${id}`);
}
