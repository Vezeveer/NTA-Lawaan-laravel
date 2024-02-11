<!-- ARCHIVE budget PROMPT.modal -->
<div class="modal fade" id="ArchiveProject">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">ARCHIVE</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <form method="post" <?php echo "action=\"/includes1/update_status_archived.php?year=$activeYear&userType={$_SESSION['userType']}\"" ?>>
                    <div class="form-group">
                        <p>Are you sure you want to archive this Budget?</p>
                    </div>
                    <button type="submit" class="btn btn-primary">Yes</button>
                </form>
            </div>
            <!-- <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" onclick="newProject()">Add</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button> 
        </div> -->
        </div>
    </div>
</div>