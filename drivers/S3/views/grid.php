<div id="toolbar-s3grid">
  <a href='?display=filestore&driver=S3&view=form' class='btn btn-default'><i class="fa fa-plus"></i>&nbsp;<?php echo _("Add S3 Bucket")?></a>
</div>
<table id="s3grid"
    data-url="ajax.php?module=filestore&driver=S3&command=grid"
    data-cache="false"
    data-cookie="true"
    data-cookie-id-table="s3grid"
    data-toolbar="#toolbar-s3grid"
    data-maintain-selected="true"
    data-show-columns="true"
    data-show-toggle="true"
    data-toggle="table"
    data-pagination="true"
    data-search="true"
    class="table table-striped">
  <thead>
    <tr>
      <th data-field="displayname" data-formatter="S3FriendlyFormatter"><?php echo _("Local Display Name")?></th>
      <th data-field="bucket"><?php echo _("Bucket")?></th>
      <th data-field="desc"><?php echo _("Description")?></th>
      <th data-field="id" data-formatter="S3LinkFormatter"><?php echo _("Actions")?></th>
    </tr>
  </thead>
</table>
<script>
  function S3LinkFormatter(value, row, index){
      var html = '<a href="?display=filestore&driver=S3&view=form&id='+value+'"><i class="fa fa-pencil"></i></a>';
      html += '&nbsp;<a href="?display=filestore&driver=S3&action=delete&id='+value+'" class="delAction"><i class="fa fa-trash"></i></a>';
      return html;
  }
  function S3FriendlyFormatter(value, row, index){
      var ret = value;
      if(!ret || 0 === ret.length){
        ret = row['bucket'];
      }
      return ret;
  }
</script>
