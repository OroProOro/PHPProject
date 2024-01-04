/* eslint-disable */

 

var limit = 10;

 

function loadMoreComments() {

    var offset = document.getElementById('commentsOffset').value;

    var xhr = new XMLHttpRequest();

    xhr.open('GET', 'database.php?offset=' + offset, true);

    xhr.onload = function () {

        if (xhr.status === 200) {

            var commentList = document.querySelector('.commentlist');

            commentList.insertAdjacentHTML('beforeend', xhr.responseText);

            document.getElementById('commentsOffset').value = parseInt(offset) + limit;

           

            var remainingComments = parseInt(xhr.getResponseHeader('remaining-comments'));

            if (remainingComments <= limit) {

                document.getElementById('loadMoreButton').style.display = 'none';

            }

        }

    };

    xhr.send();

}