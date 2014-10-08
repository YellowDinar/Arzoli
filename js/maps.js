var list = document.getElementsByClassName('m');
for (var i = 0, len = list.length;i < len;i++) {
    list[i].onclick = function () {
        var map_selected = document.getElementsByClassName('map_selected');
        if (map_selected.length > 0) {
            console.log(map_selected[0])
            map_selected[0].className = map_selected[0].className.replace(' map_selected','')
            console.log(map_selected[0])
        }
        this.className += ' map_selected';
    }
}