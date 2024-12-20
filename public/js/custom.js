function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}
function showDeleteModal(id) {
    // Cek cookie
    let modal = document.getElementById('modal')
    modal.classList.remove("d-none")
    if (getCookie('hideDeleteModal')) {
        // Jika cookie ada, langsung submit form
       
        document.getElementById('deleteForm').submit();
    } else {
        // Jika tidak ada cookie, tampilkan modal
        currentDeleteId = id;
        $('#reminderModal').modal('show');
    }
}
// Handle tombol confirm delete
document.getElementById('confirmDelete').addEventListener('click', function() {
    if (document.getElementById('dontShowToday').checked) {
        // Set cookie untuk 24 jam
        setCookie('hideDeleteModal', 'true', 1);
    }
    
    // Submit form delete
    if (currentDeleteId) {
        document.getElementById('deleteForm').submit();
    }
});



document.addEventListener('DOMContentLoaded', function() {
    if (!getCookie('hideModal')) {
        $('#reminderModal').modal('show');
    }else{
        form.submit();
    }
    
    document.getElementById('confirmDelete').addEventListener('click', function() {
        if (document.getElementById('dontShowToday').checked) {
            // Set cookie untuk 24 jam
            setCookie('hideModal', 'true', 1);
        }
        if (window.currentForm) {
            window.currentForm.submit();
        }
        
        $('#reminderModal').modal('hide');
    });
});
