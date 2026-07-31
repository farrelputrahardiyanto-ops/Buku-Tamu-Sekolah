    async function loadData(){
            try {
                const response = await fetch('ajax/users');
                if(!response.ok) {
                    throw new Error('Network response was not ok');
                }
                const data = await response.json();
                const table = document.getElementById('table');

                console.log(data);

                let html = '';

                data.forEach((users, index) => {
                    html += `
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>${index + 1}</td>
                            <td>${users.name}</td>
                            <td>${users.username}</td>
                            <td>${users.email}</td>
                            <td>${users.phone}</td>
                            <td><button class="btn btn-sm btn-warning" id="editUserBtn" data-id="${users.id}"><i class="bi bi-pencil"></i></button>
                                <button class="btn btn-sm btn-danger" id="deleteUserBtn" data-id="${users.id}"><i class="bi bi-trash"></i></button>
                                <button class="btn btn-sm btn-info" id="viewUserBtn" data-id="${users.id}"><i class="bi bi-eye"></i></button>
                            </td>
                        </tr>
                    </tbody>
                    `;
                });

                table.innerHTML = html;
            } catch (error) {
                console.error('Error fetching user data:', error);
                alert('Failed to load user data. Please try again later.');
            }
            
           
        }
        
        document.addEventListener('DOMContentLoaded', loadData);

     


        