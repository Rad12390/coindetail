 $(document).ready(function(){
    $.ajax({
                        url: "https://api.coingecko.com/api/v3/coins/list?include_platform=true",
                        method: 'get',
                         mode:    'cors',
                          headers: {
      'Content-Type': 'application/json',  // sent request
      'Accept':       'application/json'   // expected data sent back
    },
                        success:function(response)
                        {
                        
                        },

                        error: function(response) {

                        }
                    });
           
    });
