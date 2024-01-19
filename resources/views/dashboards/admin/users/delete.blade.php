<div class="fixed inset-0 flex items-center justify-center z-50 bg-gray-800 bg-opacity-75 transition-opacity duration-300" id="deleteModal" style="display: none; opacity: 0;">
    <div class="bg-white p-4 rounded-md shadow-lg">
      <h2 class="text-lg font-bold mb-2">Are you sure you want to delete?</h2>
      <p class="text-gray-700">This action cannot be undone.</p>
      <div class="mt-4 flex justify-end">
        <form id="deleteForm" class="inline" method="POST" action="{{ route('dashboards.admin.users.destroy', $user->id) }}">
          @csrf
          @method('DELETE')
          <button type="submit" class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md mr-2" id="confirmDelete">Delete</button>
        </form>
        <button class="px-4 py-2 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded-md" id="cancelDelete">Cancel</button>
      </div>
    </div>
  </div>
  
  <script>
    // JavaScript code to handle the modal
    const deleteModal = document.getElementById('deleteModal');
    const confirmDeleteBtn = document.getElementById('confirmDelete');
    const cancelDeleteBtn = document.getElementById('cancelDelete');
    const deleteForm = document.getElementById('deleteForm');
  
    // Show the modal when the delete button is clicked
    const deleteBtns = document.querySelectorAll('.deleteBtn');
    deleteBtns.forEach((btn) => {
      btn.addEventListener('click', (event) => {
        const userId = event.target.getAttribute('data-user-id');
        const formAction = "{{ route('dashboards.admin.users.destroy', ':userId') }}".replace(':userId', userId);
        deleteForm.setAttribute('action', formAction);
        deleteModal.style.display = 'flex';
        setTimeout(() => {
          deleteModal.style.opacity = '1'; // Fade-in effect
        }, 10); // Delay the fade-in effect slightly for a smoother transition
        document.body.classList.add('modal-open'); // Add the class to the body
      });
    });
  
    // Hide the modal when cancel is clicked
    cancelDeleteBtn.addEventListener('click', () => {
      deleteModal.style.opacity = '0'; // Fade-out effect
      setTimeout(() => {
        deleteModal.style.display = 'none';
      }, 300); // Delay hiding the modal to match the transition duration
      document.body.classList.remove('modal-open'); // Remove the class from the body
    });
  
    // Submit the delete form when delete is confirmed
    confirmDeleteBtn.addEventListener('click', () => {
      deleteForm.submit();
      document.body.classList.remove('modal-open'); // Remove the class from the body
    });
  </script>
  
  <style>
    .modal-open {
      background-color: rgba(0, 0, 0, 0.6); /* Semi-transparent gray background */
      overflow: hidden; /* Prevent scrolling when the modal is open */
    }
  </style>
  