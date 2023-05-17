
<script>
$( document ).ready(function() {
    function arclemapi ( action ) {
        var object = {};
          object["networkname"] = $('#networkname').val();
          object["name"] = $('#networkname').val();
          object["action"] = action;  
          var json = JSON.stringify(object);
          $.ajax( {
                type: 'POST',
                url: '{{ baseurl }}/?arclem',
                data: json,
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function(data) {
                    console.log(data);
                    $('#api-mess').text(data.message);
                    if (data.nodeid != null) {
                        $('#nodeid').val(data.nodeid);
                    }
                }
            });
    }

    $('#btn-listnetworks').click(function(e){
        e.preventDefault();
        arclemapi("listnetworks");
    });

    $('#btn-joinnetwork').click(function(e){
        e.preventDefault();
        arclemapi("joinnetwork");
    });

    $('#btn-leavenetwork').click(function(e){
        e.preventDefault();
        arclemapi("leavenetwork");
    });

    $('#btn-info').click(function(e){
        e.preventDefault();
        arclemapi("info");
    });

});
</script>