import './bootstrap';
// import Alpine from 'alpinejs';

// window.Alpine = Alpine;

// Alpine.start();

/**
 * getting the user identifier
 */
const identifier = document.getElementById('notification').getAttribute('content')



/**
 * notify users for collect
 */
window.Echo.private(`user.${identifier}`)
    .notification((notification) => {
    const notificationsCount = document.getElementById('notificationsCount');
      notificationsCount.innerText = parseInt(notificationsCount.innerText)+1;
        //console.log(notification);
    });