<!-- Description -->
<script>
       //attaching "change" event to the file upload button
document.getElementById("photo").addEventListener("change", validateFile)

function validateFile(){
  const allowedExtensions =  ['jpg','png'],
        sizeLimit = 1_000_000; // 1 megabyte

  // destructuring file name and size from file object
  const { name:fileName, size:fileSize } = this.files[0];

  /*
  * if filename is apple.png, we split the string to get ["apple","png"]
  * then apply the pop() method to return the file extension
  *
  */
  const fileExtension = fileName.split(".").pop();

  /* 
    check if the extension of the uploaded file is included 
    in our array of allowed file extensions
  */
  if(!allowedExtensions.includes(fileExtension)){
    alert("file type not allowed");
    this.value = null;
  }else if(fileSize > sizeLimit){
    alert("file size too large")
    this.value = null;
  }
}

    </script>

<div class="modal fade" id="platform">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b><span class="fullname"></span></b></h4>
      </div>
      <div class="modal-body">
        <p id="desc"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Add -->
<div class="modal fade" id="addnew">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Add New Candidate</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal"  method="POST" action="candidates_add.php" enctype="multipart/form-data">
          <div class="form-group">
            <label for="firstname" class="col-sm-3 control-label">Firstname</label>

            <div class="col-sm-9">
              <input type="text" class="form-control" id="firstname" name="firstname" required>
            </div>
          </div>
          <div class="form-group">
            <label for="lastname" class="col-sm-3 control-label">Lastname</label>

            <div class="col-sm-9">
              <input type="text" class="form-control" id="lastname" name="lastname" required>
            </div>
          </div>
          <div class="form-group">
            <label for="position" class="col-sm-3 control-label">Position</label>

            <div class="col-sm-9">
              <select class="form-control" id="position" name="position" required>
                <option value="" selected>- Select -</option>
                <?php
                $sql = "SELECT * FROM positions";
                $query = $conn->query($sql);
                while ($row = $query->fetch_assoc()) {
                  echo "
                              <option value='" . $row['id'] . "'>" . $row['description'] . "</option>
                            ";
                }
                ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="photo" class="col-sm-3 control-label">Profile Photo</label>

            <div class="col-sm-9">
              <input accept="image/png,image/jpeg,image/bmp,image/gif"  type="file" id="photo" name="photo">
            </div>
            
          </div>
          <div class="form-group">
            <label for="photo" class="col-sm-3 control-label">Election Symbol (By ETA)</label>

            <div class="col-sm-9">
              <input accept="image/png,image/jpeg,image/bmp,image/gif" type="file" id="ESI" name="ESI">
            </div>
          </div>
          <div class="form-group">
            <label for="Docs" class="col-sm-3 control-label">Required Documents</label>

            <div class="col-sm-9">
              <input accept=".pdf,.doc,.docx,application/msword" type="file" id="Docs" name="Docs" multiple>
            </div>
          </div>
          <div class="form-group">
            <label for="platform" class="col-sm-3 control-label">Platform</label>

            <div class="col-sm-9">
              <textarea class="form-control" id="platform" name="platform" rows="7"></textarea>
            </div>
          </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Edit Candidate</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="candidates_edit.php">
          <input type="hidden" class="id" name="id">
          <div class="form-group">
            <label for="edit_firstname" class="col-sm-3 control-label">Firstname</label>

            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_firstname" name="firstname" required>
            </div>
          </div>
          <div class="form-group">
            <label for="edit_lastname" class="col-sm-3 control-label">Lastname</label>

            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_lastname" name="lastname" required>
            </div>
          </div>
          <div class="form-group">
            <label for="edit_position" class="col-sm-3 control-label">Position</label>

            <div class="col-sm-9">
              <select class="form-control" id="edit_position" name="position" required>
                <option value="" selected id="posselect"></option>
                <?php
                $sql = "SELECT * FROM positions";
                $query = $conn->query($sql);
                while ($row = $query->fetch_assoc()) {
                  echo "
                              <option value='" . $row['id'] . "'>" . $row['description'] . "</option>
                            ";
                }
                ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="edit_platform" class="col-sm-3 control-label">Platform</label>

            <div class="col-sm-9">
              <textarea class="form-control" id="edit_platform" name="platform" rows="7"></textarea>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Deleting...</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="candidates_delete.php">
          <input type="hidden" class="id" name="id">
          <div class="text-center">
            <p>DELETE CANDIDATE</p>
            <h2 class="bold fullname"></h2>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b><span class="fullname"></span></b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="candidates_photo.php" enctype="multipart/form-data">
          <input type="hidden" class="id" name="id">
          <div class="form-group">
            <label for="photo" class="col-sm-3 control-label">Photo</label>

            <div class="col-sm-9">
              <input type="file" id="photo" name="photo" required>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Update Candidate Documents -->
<div class="modal fade" id="edit_photo3">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b><span class="fullname"></span></b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="Cand_Docs.php" enctype="multipart/form-data">
          <input type="hidden" class="id" name="id">
          <div class="form-group">
            <label for="Docs" class="col-sm-3 control-label">Candidate Documents</label>

            <div class="col-sm-9">
              <input accept=".pdf,.doc,.docx" type="file" id="Docs" name="Docs" multiple required>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Update ESI -->
<div class="modal fade" id="edit_photo2">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b><span class="fullname"></span></b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="candidates_ESI.php" enctype="multipart/form-data">
          <input type="hidden" class="id" name="id">
          <div class="form-group">
            <label for="ESI" class="col-sm-3 control-label">Election Symbol</label>

            <div class="col-sm-9">
              <input accept="image/png,image/jpeg,image/bmp,image/gif" type="file" id="ESI" name="ESI" required>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
        </form>
      </div>
    </div>
  </div>
</div>
<div id="imagePreview"></div>
 