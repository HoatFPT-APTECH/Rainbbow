function confirmDeletion(event,a) {
    event.preventDefault();
    var hrefA = a.getAttribute('href');
    var confirmed = window.confirm("This information in the system is important and cannot be deleted. Do you want to hide it instead?");
    
    if (confirmed) {
        window.location.href = hrefA;
        // console.log(hrefA)
    }
}
