<?php

include "../helper/config.php";

?>

<!-- select box  -->

<div>
    <label for="">Subject</label>
    <select name="" id="subject_select_box" class="form-control >
     <option value=""></option>
</select>

</div>


<script src=" <?= $base_url ?>/admin/scripts/admin.js"></script>
        <script>
            get_subjects().then(data => {

                console.log(data)
                const selectBox = document.getElementById("subject_select_box")
                let elements = `<option disabled selected>---select subject---</option>`;
                data.forEach(item => {
                    elements += `<option>${item.sub_name
                } </option > `;
            });
            selectBox.innerHTML=elements;


        });
        </script>