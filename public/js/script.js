/**
 * Created by Hayk on 05.10.2016.
 */

$('.test div').each(function () {
    $(this).on('click', function () {
        alert('asdasdas');
    });
});


$('.select-region-button').on('click', function (e) {
    e.preventDefault();
    var val = $('.select-region select#region').val();
    if(val){
        var action = $('form.select-region').attr('action');
        action = action+'/'+val;
        $('form.select-region').attr('action', action);
        $('form.select-region').submit();
    }

});

$('.add-another-image').on('click', function (e) {
    var count = this.val();
    count++;

    var input =  document.createElement('input');
    input.setAttribute('type', 'file');
    input.setAttribute('name', 'picture'+count);
    input.setAttribute('accept', 'image/*');
    input.setAttribute('class', 'form-control');
});
