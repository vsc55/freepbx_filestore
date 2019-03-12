<div id="toolbar-emailgrid">
  <a href='?display=filestore&driver=Email&view=form' class='btn btn-default'><i class="fa fa-plus"></i>&nbsp;<?php echo _("Add Email Instance")?></a>
</div>
<table id="emailgrid"
    data-url="ajax.php?module=filestore&driver=Email&command=grid"
    data-cache="false"
    data-cookie="true"
    data-cookie-id-table="emailgrid"
    data-toolbar="#toolbar-emailgrid"
    data-maintain-selected="true"
    data-show-columns="true"
    data-show-toggle="true"
    data-toggle="table"
    data-pagination="true"
    data-search="true"
    class="table table-striped">
  <thead>
    <tr>
      <th data-field="name"><?php echo _("Name")?></th>
      <th data-field="desc"><?php echo _("Description")?></th>
      <th data-field="id" data-formatter="emailLinkFormatter"><?php echo _("Actions")?></th>
    </tr>
  </thead>
</table>
<script>
function emailLinkFormatter(value, row, index){
    var html = '<a href="?display=filestore&driver=Email&view=form&id='+value+'"><i class="fa fa-pencil"></i></a>';
    html += '&nbsp;<a href="?display=filestore&driver=Email&action=delete&id='+value+'" class="delAction"><i class="fa fa-trash"></i></a>';
    return html;
}
</script>
