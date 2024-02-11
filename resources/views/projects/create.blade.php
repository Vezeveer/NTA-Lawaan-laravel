<!-- CREATE NEW PROJECT PROMPT.modal -->
<div class="modal fade" id="AddNewProject">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Project Name</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <form method="post" <?php echo "action=\"/includes1/createProject.php?year=$activeYear\"" ?>>
                    <div class="form-group">
                        <input type="text" name="projectName" class="form-control input_proj" id="inputProjectName" placeholder="Project Name" required pattern="\S(.*\S)?" title="Make sure there are no spaces in front of text and at the end." maxlength="50">
                        <input type="text" name="aipRefCode" class="form-control input_aipRefCode" placeholder="AIP Reference Code" maxlength="50" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <!-- <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" onclick="newProject()">Add</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button> 
        </div> -->
        </div>
    </div>
</div>