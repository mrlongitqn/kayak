/**
 * Created by LongNguyen on 02/07/2017.
 */
function deleteModal(id, routes) {
    $('#form_modal_delete').attr('action', root + routes);
    $('#del_modal_id').val(id);
    $('#deleteModal').modal('show');
}
