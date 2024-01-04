<div id="id02" class="modal-update">
      <span onclick="document.getElementById('id02').style.display='none'" class="close-update"
        title="Close Modal">X</span>
      <form class="modal-content">
        <div class="container">
          <h1>Update Category</h1>
          <p>Please fill in this form to update Detail .</p>
          <hr />
          <label for="name-update"><b>Category Name</b></label>
          <input name="name-update" id="name-update" type="text" placeholder="Enter Name" required />
          <div class="clearfix">
            <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">
              Cancel
            </button>
            <button type="submit" class="updatebtn" id="updatebtn" onclick="handleUpdate(event)">
              Update
            </button>
          </div>
        </div>
      </form>
    </div>