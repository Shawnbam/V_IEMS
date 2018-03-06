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
$('.plike').on('click',function (event) {
    event.preventDefault();
    postId = event.target.parentNode.parentNode.dataset['postid'];
    var isLike = event.target.previousElementSibling.previousElementSibling == null;
    $.ajax({
        method: 'POST',
        url: urlLike,
        data:{isLike : isLike, postId: postId, _token : token}
    })
        .done(function (msg) {
            event.target.innerText = isLike ? event.target.innerText == 'Like' ? 'Liked' : 'Like' : event.target.innerText == 'Dislike' ? 'Disliked' : 'Dislike';
            //console.log(isLike);
            if(isLike){
                event.target.nextElementSibling.nextElementSibling.innerHTML = 'Dislike';
                //console.log(event.target.nextElementSibling.nextElementSibling);
                event.target.previousElementSibling.innerHTML = msg['plikecnt'];
                event.target.nextElementSibling.innerHTML = msg['pdislikecnt'];
            } else {
                event.target.previousElementSibling.previousElementSibling.innerHTML = 'Like';
                //console.log(event.target.previousElementSibling.previousElementSibling);
                event.target.previousElementSibling.previousElementSibling.previousElementSibling.innerHTML = msg['plikecnt'];
                event.target.previousElementSibling.innerHTML = msg['pdislikecnt'];
            }
        });
});


$('.pclike').on('click',function (event) {
    event.preventDefault();
    postId = event.target.parentNode.parentNode.dataset['postid'];
    pcommentid = event.target.parentNode.parentNode.dataset['pcommentid'];
    var isLike = event.target.previousElementSibling.previousElementSibling == null;
    console.log(isLike);
    $.ajax({
        method: 'POST',
        url: urlCLike,
        data:{isLike : isLike, postId: postId, pcommentid: pcommentid, _token : token}
    })
        .done(function (msg) {
            event.target.innerText = isLike ? event.target.innerText == 'Like' ? 'Liked' : 'Like' : event.target.innerText == 'Dislike' ? 'Disliked' : 'Dislike';
            console.log(msg['pclikecnt'] + " " + msg['pcdislikecnt']);
            if(isLike){
                event.target.nextElementSibling.nextElementSibling.innerHTML = 'Dislike';
                //console.log(event.target.nextElementSibling.nextElementSibling);
                event.target.previousElementSibling.innerHTML = msg['pclikecnt'];
                event.target.nextElementSibling.innerHTML = msg['pcdislikecnt'];
            } else {
                event.target.previousElementSibling.previousElementSibling.innerHTML = 'Like';
                //console.log(event.target.previousElementSibling.previousElementSibling);
                event.target.previousElementSibling.previousElementSibling.previousElementSibling.innerHTML = msg['pclikecnt'];
                event.target.previousElementSibling.innerHTML = msg['pcdislikecnt'];
            }
        });
});


$('.qlike').on('click', function(event) {
    event.preventDefault();
    queryId = event.target.parentNode.parentNode.dataset['queryid'];
    var isLike = event.target.previousElementSibling.previousElementSibling == null;
    $.ajax({
        method : 'POST',
        url : urlQLike,
        data : {isLike: isLike, queryId: queryId, _token: token}
    })

        .done(function (msg) {
            event.target.innerText = isLike ? event.target.innerText == 'Like' ? 'Liked' : 'Like' : event.target.innerText == 'Dislike' ? 'Disliked' : 'Dislike';
            //console.log(isLike);
            if(isLike){
                event.target.nextElementSibling.nextElementSibling.innerHTML = 'Dislike';
                //console.log(event.target.nextElementSibling.nextElementSibling);
                event.target.previousElementSibling.innerHTML = msg['qlikecnt'];
                event.target.nextElementSibling.innerHTML = msg['qdislikecnt'];
            } else {
                event.target.previousElementSibling.previousElementSibling.innerHTML = 'Like';
                //console.log(event.target.previousElementSibling.previousElementSibling);
                event.target.previousElementSibling.previousElementSibling.previousElementSibling.innerHTML = msg['qlikecnt'];
                event.target.previousElementSibling.innerHTML = msg['qdislikecnt'];
            }
        });
});

$('.qclike').on('click',function (event) {
    event.preventDefault();
    queryId = event.target.parentNode.parentNode.dataset['queryid'];
    qcommentid = event.target.parentNode.parentNode.dataset['qcommentid'];
    var isLike = event.target.previousElementSibling.previousElementSibling == null;
    console.log(isLike);
    $.ajax({
        method: 'POST',
        url: urlQCLike,
        data:{isLike : isLike, queryId: queryId, qcommentid: qcommentid, _token : token}
    })
        .done(function (msg) {
            event.target.innerText = isLike ? event.target.innerText == 'Like' ? 'Liked' : 'Like' : event.target.innerText == 'Dislike' ? 'Disliked' : 'Dislike';
            console.log(msg['qclikecnt'] + " " + msg['qcdislikecnt']);
            if(isLike){
                event.target.nextElementSibling.nextElementSibling.innerHTML = 'Dislike';
                //console.log(event.target.nextElementSibling.nextElementSibling);
                event.target.previousElementSibling.innerHTML = msg['qclikecnt'];
                event.target.nextElementSibling.innerHTML = msg['qcdislikecnt'];
            } else {
                event.target.previousElementSibling.previousElementSibling.innerHTML = 'Like';
                //console.log(event.target.previousElementSibling.previousElementSibling);
                event.target.previousElementSibling.previousElementSibling.previousElementSibling.innerHTML = msg['qclikecnt'];
                event.target.previousElementSibling.innerHTML = msg['qcdislikecnt'];
            }
        });
});
