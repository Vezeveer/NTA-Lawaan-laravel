<!--View Docs PROMPT.modal -->
<div class="modal fade" id="ViewDocs">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">View Documents</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <form name="user_create" method="post" <?php echo "action=\"../docs.php?year={$activeYear}\"" ?>>
                    
                    <div class="form-group">
                        <select name="imgType" class="custom-select" id="inputGroupSelect01" required>
                            <option selected value="tl" selected>Transmittal Letter</option>
                            <option value="robdp">Resolution of Barangay Development Plan</option>
                            <option value="rataip">Resolution Approving the Annual Investment Plan</option>
                        </select>
                    </div>
                    <div class="form-group m-auto">
                            <button type="submit" class="btn btn-primary">View</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>