$(document).ready(function() {


    // $.ajax({
    // async: false,
    // method: 'GET',
    // url: '../index.php',
    // // cache: true,
    // success: function (data) {
    //     console.log(data);
    // }
    // });
    // $.ajax({
    //   type: 'GET',
    //   url: '../index.php',
    //   // data: new FormData(this),
    //   // dataType: 'json',
    //   // contentType: false,
    //   // processData:false,//this is a must
    //   success: function(response){
    //   		$('.div-view').html(response);
    //   }
    // });
    // $.get(url, data).done(function(resultat) {
    //     $('.monDivQuiVaRecupLeContenu').html(resultat)
    //     });

    // $('body').on('click', 'button.navig', function() {
    //     let entity = $(this).attr('id');
    //     let url = '/'+entity+'/index';
    //     console.log(url);
    //     //requete de suppression
    //     $.post(url).done(function(result) {
    //             $(result).filter('mon-body.mes-vues');
    //
    //             console.log(result);
    //             // let data = $(result).find('divViews').attr('class');
    //             // console.log(data);
    //             // $(result).find('divViews').html(data);
    //             // console.log(result);
    //             // //on update le div.update avec le resultat (list_xhr.php)
    //             $('#mes-vues').html(result);
    //     }).fail(function(err) {
    //         console.warn('err', err);
    //     });
    // });

    $('body').on('click', 'button.delete', function() {
        let id = $(this).attr('id');
        let entity = $('label.category').val();
        let url = '/'+entity+'/destroy/'+id;
        //requete de suppression
        $.post(url, {id: id, delete: true})
            .done(function(result) {
                console.log(result);
                let data = $(result).find('div-view').html(result);
                //on update le div.update avec le resultat (list_xhr.php)
                $('.div-view').html(data);
                location.reload(true);
        }).fail(function(err) {
            console.warn('err', err);
        });
    });
    // $('body').on('click', 'button.modify', function() {
    //     let id = $(this).attr('id');
    //     let entity = $('label.category').val();
    //     let url = '/'+entity+'/edit/';
    //     console.log(url);
    //     //requete de suppression
    //     $.get(url, id)
    //         .done(function(result) {
    //             console.log(result);
    //             // let data = $(result).find('div-view').html();
    //             $('.divViews').html(result);
    //             // location.reload(true);
    //     }).fail(function(err) {
    //         console.warn('err', err);
    //     });
    // });
    // j'aurais pu faire comme cela aussi
    // $("button.delete").click(buttonClicked);
    // function buttonClicked()
    //   {
    //       inject_to = $("div.divViews"); // the div to load the html into
    //       let id = $(this).attr('id');
    //       let entity = $('label.category').val();
    //       load_from = '/'+entity+'/destroy/'+id;
    //       data = ""; // optional data to send to the other page when loading it
    //
    //       // on fait un get de façon asynchronisée
    //       $.get(load_from, data, function(data)
    //       {
    //           inject_to.html(data);
    //           location.reload(true);
    //       })
    // }
    //Je ne sais pas pourquoi mais mon controller store n'est pas du tout appelé via //chenilivan.local/animal/store  ou via /animal/store/
    // $('button.create-animal').on('click', function() {
    //     var animal = {
    //         nom: $('input.nom').val(),
    //         sexe: $('input.sexe').val(),
    //         type: $('input.type').val(),
    //         sterilise: $('input.sterilise').val(),
    //         date_naissance: $('input.date_naissance').val(),
    //         id_proprietaire: $('select.id_proprietaire option:selected').val()
    //     }
    //     console.log(animal);
    //
    //     $.post('//chenilivan.local/animal/store', animal)
    //         .done(function(result) {
    //             console.log('success', result);
    //             $('p.message-erreur').text(animal['nom']+" a bien été ajouté !");
    //             $('p.message-erreur').show(3500);
    //             setTimeout(function() {
    //               $('p.message-erreur').hide(1500);
    //             }, 6000);
    //         }).fail(function(err) {
    //             $('p.message-erreur').text("erreur suite à l'ajout de "+animal['nom']);
    //             $('p.message-erreur').show(3500);
    //             setTimeout(function() {
    //               $('p.message-erreur').hide(1500);
    //             }, 6000);
    //     });
    // });
    // //
    // //

    // $('button.save').on('click', function() {
    //     //req post vers notre index
    //     $.post('index.php', pokemon).done(function(result) {
    //         console.log('success save', result);
    //         //on update le div.update avec le resultat (list_xhr.php)
    //         $('.update').html(result);
    //     }).fail(function(err) {
    //         console.warn('fail err', err);
    //     });
    // });
    // //
    // console.log("check si ça fonctionne...");
});
