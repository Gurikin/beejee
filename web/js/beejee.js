function actionLink() {
    $(this).click(function () {
        $('#menu a').removeClass('active');
        $(this).addClass('active');
    });
    return
}
//
// <ul class="nav nav-masthead" id="menu" role="tablist">
//     <li class="nav-item">
//     <a class="nav-link active" href="/task/index" role="tab">Home</a>
//     </li>
//     <li class="nav-item">
//     <a class="nav-item nav-link" href="/user/login" role="tab">Sign in</a>
//     </li>
//     </ul>