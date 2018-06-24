class Exhibition {

    constructor(id){
        this.id = id;
    }

    render(key, objectJSON){    // генерируем  секции выставок

        //  забираем из переданного объекта все данные
        let sectionID = 'section'+ key,
            exhibitionYear = objectJSON.year,
            exhibitionText = objectJSON.text,
            exhibitionPictures = objectJSON.pictures;

    // создаем элементы  секций
        let $exhibitionWrapper = $('#exhibitionWrapper');
    // сама секция
        let $exhibitionSection = $('<section />', {
           class: 'exhibitionSection'
        });
        $exhibitionSection.attr('id', sectionID);
    // год  выставки
        let $exhibitionYear = $('<span />', {
            text: exhibitionYear,
            class: "exhibitionYear"
        });
    // текст
        let $exhibitionText = $('<p />', {
           text: exhibitionText,
           class: "exhibitionText"
        });
    //  изображения
        let $exhibitionPictures = $('<div />',{
           class: "exhibitionPictures"
        });
        console.log(exhibitionPictures);
        for(key in exhibitionPictures){
            console.log(exhibitionPictures[key]);
            let urlPrev = exhibitionPictures[key].urlPrev;
            let $exhibitionPicture = $('<img />',{
               src: urlPrev,
               class: "exhibitionPictureItem"
            });
            $exhibitionPicture.appendTo($exhibitionPictures);
        }

        //  выводим  элементы на страницу
        $exhibitionSection.append($exhibitionYear);
        $exhibitionSection.append($exhibitionText);
        $exhibitionSection.append($exhibitionPictures);
        $exhibitionSection.appendTo($exhibitionWrapper);

    }
}