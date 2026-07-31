    async function loadData(){
            try {
                const response = await fetch('ajax/users');
                if(!response.ok) {
                    throw new Error('Network response was not ok');
                }
                const data = await response.json();
                const table = document.getElementById('table');

                console.log(data);

                let rows = '';

                data.forEach((users, index) => {
                    rows += `
                  
                    
                        <tr>
                            <td>${index + 1}</td>
                            <td>${users.name}</td>
                            <td>${users.username}</td>
                            <td>${users.email}</td>
                            <td>${users.phone}</td>
                            <td>
                                <div class="btn-group gap-2" role="group">
                                    <button class="btn btn-sm btn-warning " data-id="${users.id}"><i class="bi bi-pencil"></i></button>
                                    <button class="btn btn-sm btn-danger" data-id="${users.id}"><i class="bi bi-trash"></i></button>
                                    <button class="btn btn-sm btn-info" data-id="${users.id}"><i class="bi bi-eye"></i></button>
                                </div>
                            </td>
                        </tr>
            
                    `;
                });

                table.innerHTML = `  <thead>
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
                         ${rows}
                        </tbody>`;
            } catch (error) {
                console.error('Error fetching user data:', error);
                alert('Failed to load user data. Please try again later.');
            }
            
           
        }
        
        document.addEventListener('DOMContentLoaded', loadData);

        document.getElementById('addUserBtn').addEventListener('click', function() {
            window.location.href = "users/create";
        });