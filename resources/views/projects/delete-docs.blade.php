
<!-- DELETE DOCUMENT PROMPT OLD.modal -->
<div class="modal fade" id="DeleteDocOld">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">DELETE</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <form method="post" <?php echo "action=\"/includes1/delete_doc.php?year={$_GET['year']}&docType={$docType}\"" ?>>
                    <div class="form-group">
                        <p>Are you sure you want to delete this document?</p>
                    </div>
                    <button type="submit" class="btn btn-primary">Yes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </form>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="newProject()">Add</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button> 
            </div> -->
        </div>
    </div>
</div>