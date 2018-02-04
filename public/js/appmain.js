var postId = 0;
var postBodyElement = null;

// $('.like').on('click',function (event) {
//     event.preventDefault();
//     postId = event.target.parentNode.parentNode.dataset['postid'];
//     var isLike = event.target.previousElementSibling == null;
//     console.log(isLike + ' ' + postId + ' ' + urlLike);
//
//
//     $.ajax({
//         method: 'POST',
//         url: urlLike,
//         data: {isLike: isLike, postId: postId, _token: token }
//     })
//         .done(function (msg) {
//             console.log('here');
//             // event.target.innerText = isLike ? event.target.innerText == 'Like' ? 'Liked' : 'Like' : event.target.innerText == 'Dislike' ? 'Disliked' : 'Dislike';
//             // if(isLike){
//             //     event.target.nextElementSibling.innerHTML = 'Dislike';
//             // } else {
//             //     event.target.previousElementSibling.innerHTML = 'Like';
//             // }
//
//         })
// });
$('.like').on('click',function (event) {
    event.preventDefault();
    postId = event.target.parentNode.parentNode.dataset['postid'];
    var isLike = event.target.previousElementSibling == null;
    console.log(isLike + ' ' + postId);
    $.ajax({
        method: 'POST',
        url: urlLike,
        data:{isLike : isLike, postId: postId, _token : token}
    })
        .done(function () {
            event.target.innerText = isLike ? event.target.innerText == 'Like' ? 'Liked' : 'Like' : event.target.innerText == 'Dislike' ? 'Disliked' : 'Dislike';
            if(isLike){
                event.target.nextElementSibling.innerHTML = 'Dislike';
            } else {
                event.target.previousElementSibling.innerHTML = 'Like';
            }
        });
});