function updateCreate(){
    $('#updateCreateCase').modal('show')
    
    tinymce.get("txtQuestion").setContent(details);
}

function btnCreate(book,title,chapter,section){
    var content = tinymce.get('txtQuestion').getContent();
    
    var redirect = "";
    var url = "/penal-code/books/create"
    data = {
        book_id:book,
        title_id:title,
        chapter_id:chapter,
        section_id:section,
        details:content
    }
    if(content){
        storeData(url,data,redirect);
    }else{
        console.log('required');
    }
}


function createQuestion(){
    var content = tinymce.get('txtQuestionTrueOrFalse').getContent();
    var answer = $("input[name=answer]:checked").val();
    var type = "true_or_false"
    var redirect = "";
    var url = "/question/create/v?book="+book+"&title="+title+"&chapter="+chapter??null+"&section="+section??null
    data = {
        question:content,
        answer:answer,
        type:type
    }
    storeData(url,data,redirect);
}

function createQuestionIdentification(){
    var content = tinymce.get('txtQuestionIdentification').getContent();
    var answer = $('#identificationAnswer').val()
    var type = "identification"

    var redirect = "";
    var url = "/question/create/identification/v?book="+book+"&title="+title+"&chapter="+chapter+"&section="+section
    data = {
        question:content,
        answer:answer,
        type:type
    }
    storeData(url,data,redirect);
}