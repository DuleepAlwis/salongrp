var vm = new Vue({
    el:'#AppStock',
    data:{
        ajax:new XMLHttpRequest()
    },
    methods:{
        ajaxMethod:function (msg) {
            var quantity = document.getElementById(id).value
            var url = '../controller/ReceptionistAjax.php'
            console.log(id+" "+quantity)
            obj.open('POST',url,true)
            obj.setRequestHeader('Content-Type','application/x-www-form-urlencoded')
            obj.send(msg)
        },
        UpdateStock:function (id) {
            var quantity = document.getElementById(id).value
            var msg = 'Id'+id+"&q="+quantity+"&number="+1
            this.ajaxMethod(msg)
        },

    }

})

