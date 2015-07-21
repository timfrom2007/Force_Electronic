function ShowTime(){
        var NowDate=new Date();
        var h=NowDate.getHours();
        var m=NowDate.getMinutes();
        var s=NowDate.getSeconds();
        var k=s*5845.3+m*352023+h*21361646;
        var p=k*1000;
        var K=fmoney(k,1);
        var P=fmoney(p,1);

    document.getElementById('eletrical_energy_num').innerHTML = P+"&nbsp;&nbsp;&nbsp;Kw";
    document.getElementById('carbon_reduction_num').innerHTML = K+"&nbsp;&nbsp;&nbsp;Ton";
    setTimeout('ShowTime()',1000);
}

function fmoney(s, n) {
    n = n > 0 && n <= 20 ? n : 2;
    s = parseFloat((s + "").replace(/[^\d\.-]/g, "")).toFixed(n) + "";
    var l = s.split(".")[0].split("").reverse(), r = s.split(".")[1];
    t = "";

    for (i = 0; i < l.length; i++) {
        t += l[i] + ((i + 1) % 3 == 0 && (i + 1) != l.length ? "," : "");
    }
    return t.split("").reverse().join("") + "." + r;
}
