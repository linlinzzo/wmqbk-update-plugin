<!-- 此处两个脚本引用外部库 -->
<script type="text/javascript" language="javascript" src="https://cdn.bootcdn.net/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" language="javascript" src="https://www.layuicdn.com/layer-mobile-v2.0/layer.js"></script>
<!-- 这两个脚本外部库找不到，引用本地库 -->
<script type="text/javascript" language="javascript" src="assets/js/ajax.js?v=4.1"></script>
<?php if(ADMIN) echo '<script type="text/javascript" language="javascript" src="assets/js/admin.js?v=4.0"></script>';?>
