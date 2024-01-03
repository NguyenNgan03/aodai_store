<div id="id01" class="modal">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">X</span>
      <form class="modal-content">
        <div class="container">
          <h1>Add Category</h1>
          <p>Please fill in this form to add details.</p>
          <hr />
          <label for="name"><b>Category Name</b></label>
          <input name="name" id="name" type="text" placeholder="Enter Name" required />
          <div class="clearfix">
            <button onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">
              Cancel
            </button>
            <button type="button" class="addProductbtn" id="addProductbtn" onclick="handleSubmitProduct(event)">
              Add
            </button>
          </div>
        </div>
      </form>
    </div>