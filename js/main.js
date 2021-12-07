function prikazi(){
   var bg = document.getElementById('form-bg');
   var forma = document.getElementById('form-prikaz');

   bg.style.display="block";
   forma.style.display="block";
}

$('#form').submit(function(){
    event.preventDefault();
    const $form =$(this);
    const serijalizacija = $form.serialize();
    console.log(serijalizacija);
    
    if (activeItem){
        urediAjax(serijalizacija);
        return;
    }

    req = $.ajax({
        url: 'handler/add.php',
        type:'post',
        data: serijalizacija
    });

    req.done(function(res, textStatus, jqXHR){
        if(res=="Success"){
            location.reload(true);
        }else console.log("Dogadjaj nije dodat "+res);
        console.log(res);
    });

    req.fail(function(jqXHR, textStatus, errorThrown){
        console.error('Sledeca greska se desila> '+textStatus, errorThrown)
    });
});

var activeItem = false;

function ponisti(){
    activeItem = false;

    var bg = document.getElementById('form-bg');
    var forma = document.getElementById('form-prikaz');
 
    bg.style.display="none";
    forma.style.display="none";
}

function uredi(id, naslov, opis, lokacija, vremeod, vremedo){
    prikazi();
    activeItem = true;
    document.getElementById('form-id').value =id;
    document.getElementById('form-naslov').value =naslov;
    document.getElementById('form-opis').value = opis;
    document.getElementById('form-lokacija').value = lokacija;
    
    var vremeod2 = Date.parse(vremeod) +1000*60*60;
    vremeod2 = new Date(vremeod2).toISOString().slice(0,16);
    document.getElementById('form-vremeod').value = vremeod2;

    var vremedo2 = Date.parse(vremedo) +1000*60*60;
    vremedo2 = new Date(vremedo2).toISOString().slice(0,16);
    document.getElementById('form-vremedo').value = vremedo2;
}

function urediAjax(serijalizacija){

    req = $.ajax({
        url: 'handler/update.php',
        type:'post',
        data: serijalizacija,
    });

    req.done(function(res, textStatus, jqXHR){
        if(res=="Success"){
            location.reload(true);
        }else console.log("Dogadjaj nije uredjen "+res);
        console.log(res);
    });

    req.fail(function(jqXHR, textStatus, errorThrown){
        console.error('Sledeca greska se desila> '+textStatus, errorThrown)
    });

    activeItem = false;
}

function obrisi(id1){
    req = $.ajax({
        url: 'handler/delete.php',
        type:'post',
        data: {id:id1},
    });

    req.done(function(res, textStatus, jqXHR){
        if(res=="Success"){
            location.reload(true);
        }else console.log("Dogadjaj nije obrisan "+res);
        console.log(res);
    });

    req.fail(function(jqXHR, textStatus, errorThrown){
        console.error('Sledeca greska se desila> '+textStatus, errorThrown)
    });

    activeItem = false;
}
