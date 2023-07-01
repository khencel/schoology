
var activity_id = null;
var url = window.location.href;
var question_id = null;
var question_bank_id = null;
function btnCreate(subject_id){
    var title = $('#activity_title').val();
    var redirect = "/subject/activity/show/"+subject_id;
    var url = "/subject/activity/store"
    data = {
        subject_id:subject_id,
        title:title
    }
    // params 1 route url
    // params 2 request data
    // params 3 redirect page
    if(title){
        storeData(url,data,redirect);
    }else{
        $("#activity_title_error").text("The activity title field is required.");
    }
    
}

function editActivity(data){
    activity_id = data.id;
    $('#activity_title_edit').val(data.title)
    $('#editActivity').modal('show');
}

function btnEdit(subject_id){
    var title = $('#activity_title_edit').val();

    var redirect = "/subject/activity/show/"+subject_id;
    var url = "/subject/activity/update/"+activity_id
    data = {
        title:title
    }
    if(title){
        updateData(url,data,redirect);
    }else{
        $("#activity_title_edit_error").text("The activity title field is required.");
    }
}

function viewQuestionnaire(selected_activity,course_id,subject){
    window.location = "/subject/activity/add/"+selected_activity+'/'+course_id+'/'+subject
    this.activity_id = selected_activity;
}

function storeActivity(){
    storeDataForm('#submitForm');
}

function selectType(){
    var type_edit = $("#type_question_edit").val();
    var type_add = $("#type_question").val();
    var type = null;
    if(type_add){
        type = type_add
    }   
    if(type_edit){
        type = type_edit
    }   
    showType(type)
}

function deletequestion(question_id){
    var url = "/subject/activity/questionnaire/delete/"+question_id
    var redirect = "";
    deleteData(url,redirect);
}

function editQuestion(question){
    question_id = question.id;
    $('#type_question_edit').val(question.question_type);
    var choices = JSON.parse(question.choices);
    editor('#txtQuestion_edit',question.question);
    editor('#essay_answer_edit',question.answer);
    showType(question.question_type)
    $('.choice_a').val(choices[0]);
    $('.choice_b').val(choices[1]);
    $('.choice_c').val(choices[2]);
    $('.choice_d').val(choices[3]);
    $('.mul_answer').val(question.answer);
    $('.t_f_answer').val(question.answer);
    $('#question_id').val(question.id)
    $('#editItem').modal('show');
}

function updateQuestion(){
    updateDataForm('#editSubmitForm');
}

function showType(type){
    $('.multiple-choice-cont').addClass('d-none');
    $('.true-false-cont').addClass('d-none');
    $('.essay-cont').addClass('d-none');

    if(type == "mc"){
        $('.multiple-choice-cont').removeClass('d-none');
    }
    if(type == "tf"){
        $('.true-false-cont').removeClass('d-none');
    }
    if(type == "essay"){
        $('.essay-cont').removeClass('d-none');
    }
}

function storeQuestionBank(){
    storeDataForm('#formStoreQuestionBank');
}

function deleteQuestionBank(questionBankId){
    var url = "/subject/questionBank/delete/"+questionBankId
    var redirect = "";
    deleteData(url,redirect);
}

function viewEditQuestionBank(data){
    question_bank_id = data.id
    tinymce.get('txtEditQuestionBank').setContent(data.question)
    $('#question_bank_id').val(data.id);
    $('#editQuestionBank').modal('show');
}

function updateQuestionBank(){
    var question = tinymce.get('txtEditQuestionBank').getContent()
    var redirect = "";
    var url = "/subject/questionBank/update/"+question_bank_id

    data = {
        question:question
    }

    updateData(url,data,redirect);
}


function editor(element_id,value){
    tinymce.init({
        selector: element_id,
        init_instance_callback : function(editor) {
            editor.setContent(value);
        }
    });
}

function getQuestionBank(question){
    var question = tinymce.get('txtQuestion').setContent(question.question)
}

function getQuestionBankEdit(question){
    var question = tinymce.get('txtQuestion_edit').setContent(question.question)
}

function deleteActivity(activity_id){
    var url = "/subject/activity/delete/"+subject_id+'/'+activity_id
    var redirect = "";
    deleteData(url,redirect);
}

