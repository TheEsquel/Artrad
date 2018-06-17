window.onload = function () {
    var pictures1990 = document.getElementById('exhibitionPictures1990');
    for (key in exhibitionObject["1990"]){
        //создаем  превью картинки,  назначаем класс ,  id 
        var exhibitionPictureItem = document.createElement('img');
        exhibitionPictureItem.setAttribute('class' , 'exhibitionPictureItem');
        pictureId = 'exhibitionPicture_' + key;
        exhibitionPictureItem.setAttribute('id', pictureId);
        var keyInteger = parseInt(key);
        console.log (keyInteger);
        var picUrl = exhibitionObject["1990"][key].urlPrev; 
        exhibitionPictureItem.setAttribute('src', picUrl);
        pictures1990.appendChild(exhibitionPictureItem);  
        exhibitionPictureItem.addEventListener ('click', showModalPicture);
    }
    var images = document.getElementsByTagName('img');
    console.log(images + ' is an ' + typeof images);


}


function showModalPicture () {
    var modalWindowElement =  document.getElementById('modalWindowPicture');
    var modalImageElement =  document.getElementById('modalExhibitionImage');
    modalWindowElement.style.width = '1000px';
    var imageId = this.id.split('_')[1];
    var imageUrl = exhibitionObject["1990"].toString;
    console.log(imageUrl);
    // console.log(exhibitionObject);
    modalWindowElement.style.display = 'block';
    var srcImage = exhibitionObject['1990']["1"].url.toString;
    // modalImageElement.setAttribute('src', srcImage);
    var imageWindth =  exhibitionObject["1990"][key].width;
}


