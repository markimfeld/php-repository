$(document).ready( function() {
    console.log("jquery is working");

    $('#task-result').hide();

    fetchTasks();

    $('#search').keyup(function(e){
        if($('#search').val()) {
            let search = $('#search').val();
            $.ajax({
                url: 'task-search.php',
                type: 'POST',
                data: {search},

                success: function (response) {
                    let tasks = JSON.parse(response);
                    let template = '';
                    tasks.forEach(task => {
                        template += `<li>
                            ${task.name}
                        </li>`
                    })

                    $('#container').html(template);
                    $('#task-result').show();
                }
            });
        } else {
            $('#task-result').hide();
        }
    })


    $('#task-form').submit(function(e) {
        const postData = {
            name: $('#name').val(),
            description: $('#description').val()
        };
        $.post('task-add.php', postData, function (response) {
            fetchTasks();
            console.log(response);

            $('#task-form').trigger('reset');
        });
        e.preventDefault();
    });


    function fetchTasks() {
        $.ajax({
            url: 'task-list.php',
            type: 'GET',
            success: function(response) {
                let tasks = JSON.parse(response);
                let template = '';
                tasks.forEach(task => {
                    template += `
                        <tr taskId="${task.id}">
                            <td>${task.id}</td>
                            <td>${task.name}</td>
                            <td>${task.description}</td>
                            <td>
                                <button class="task-delete btn btn-danger">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    `
                });
                $('#tasks').html(template); 
            }
        })
    }

    $(document).on('click', '.task-delete', function () {
        if(confirm('Are you sure you want to delete it?')) {
            let element = $(this)[0].parentElement.parentElement;
            let id = $(element).attr('taskId');
            $.post('task-delete.php', {id}, function (response) {
                fetchTasks();
            })
        }
    })

});