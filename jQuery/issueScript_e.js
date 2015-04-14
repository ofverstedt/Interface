/**
 * Created by Elias on 2015-04-07.
 */
$(document).ready(function(){

    $("#1").click(function(){

        $('#areaList').fadeToggle('fast');
    });

    $("#2").click(function(){

        $('#issueList').fadeToggle('fast');



    });


    $('tr.header').click(function(){
            $(this).siblings('.child-'+this.id).toggle('fast');
        });

    $("tr[class^=child-]").hide().children('tr');

});

var listOverIssues = ["Belysning", "Fålhagen", "Gator", "Stenhagen", "Soptunnor", "Kåbo", "Vatten", "Ekeby"];

function printIssueList(listOverIssues){
    for (i=0; i<listOverIssues.length; i++){
        if(i%2===0){
            tr = document.createElement("tr");
        }
        td = document.createElement("td");
        td.setAttribute(i.toString());
        tr.appendChild(td);
        document.getElementById("infoLista").appendChild(tr);
    }
}

function showList() {
    issueList.fadeToggle("fast");
}
