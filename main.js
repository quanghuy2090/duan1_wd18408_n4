var album = [];
for (var i = 0; i < 5; i++) {
    album[i] = new Image();
    album[i].src = "./img/anh" + i + ".jpeg";
}
var interval = setInterval(slideshow, 3000);
index = 0;
function slideshow() {
    index++;
    if (index > 4) {
        index = 0;
    }
    document.getElementById("banner").src = album[index].src;


}
function next() {
    index++;
    if (index > 4) {
        index = 0;
    }
    document.getElementById("banner").src = album[index].src;

}
function pre() {
    index--;
    if (index < 0) {
        index = 4;
    }
    document.getElementById("banner").src = album[index].src;

}
function tang(x) {
    let sl = x.previousSibling;
    let slcu = sl.innerHTML;
    let slmoi = parseInt(slcu) + 1;
    sl.innerHTML = slmoi;

    // let id = x.nextSibling.value;
    // $.post("capnhatsoluong.php",
    //     {
    //         'id': id,
    //         'slmoi': slmoi
    //     },
    //     function (data, textStatus, jqXHR) {
    //         $("#cart").html(data);
    //     }
    // );

    let parent = x.parentElement;
    let dongia_obj = parent.previousSibling.previousSibling;
    let dongia =dongia_obj.innerText;
    let tt_obj = parent.nextSibling.nextSibling;
    let tt = parseInt(dongia)*parseInt(slmoi);
    tt_obj.innerText=tt;
}
function giam(x) {
    let sl = x.nextSibling;
    let slcu = sl.innerHTML;
    if (parseInt(slcu) > 1) {
        var slmoi = parseInt(slcu) - 1;
        sl.innerHTML = slmoi;
    } else {
        alert('Không thể giảm thêm');
    }
    let parent = x.parentElement;
    let dongia_obj = parent.previousSibling.previousSibling;
    let dongia =dongia_obj.innerText;
    let tt_obj = parent.nextSibling.nextSibling;
    let tt = parseInt(dongia)*parseInt(slmoi);
    tt_obj.innerText=tt;

}
