$(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});

// Basic example
$(document).ready(function () {
  $('#dtBasicExample').DataTable({
    "searching": true // false to disable search (or any other option)
  });
  $('.dataTables_length').addClass('bs-select');
});

document.getElementById('add-text-field').addEventListener('click', function () {
  const container = document.getElementById('text-field');
  const input = document.createElement('input');
  input.type = 'text';
  input.name = 'text_fields[]';
  input.required = true;
  container.insertBefore(input, container.children[container.children.length - 1]);
});

document.getElementById('form').addEventListener('submit', function (event) {
  const textFields = document.getElementsByName('text_fields[]');
  for (let i = 0; i < textFields.length; i++) {
      if (textFields[i].value === '') {
          alert('Please fill out all text fields before submitting.');
          event.preventDefault();
          break;
      }
  }
});

new DataTable('#example');