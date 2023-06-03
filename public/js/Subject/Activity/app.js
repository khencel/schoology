var activity_id = null;
var url = window.location.href;
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

function viewQuestionnaire(selected_activity){
    window.location = "/subject/activity/add/"+selected_activity
    this.activity_id = selected_activity;
}

function storeActivity(){
    storeDataForm('#submitForm');
}

function selectType(){
    var type = $("#type_question").val();
    $('#multiple-choice-cont').addClass('d-none');
    $('#true-false-cont').addClass('d-none');
    $('#essay-cont').addClass('d-none');

    if(type == "mc"){
        $('#multiple-choice-cont').removeClass('d-none');
    }
    if(type == "tf"){
        $('#true-false-cont').removeClass('d-none');
    }
    if(type == "essay"){
        $('#essay-cont').removeClass('d-none');
    }
}

function deletequestion(question_id){
    var url = "/subject/activity/questionnaire/delete/"+question_id
    var redirect = "";
    deleteData(url,redirect);
}