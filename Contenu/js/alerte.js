$(function(){
    $modal = $('#modal-dialog')
   $('a.btn-del-billet').on('click',function(e){
       e.preventDefault()
       $modal.find('a#btnYes').attr('href',$(this).data('modalConfirmUrl'));
       $modal.find('.modal-body p').text("Etes vous sur de vouloir supprimer \"" + $(this).data('billetTitle') + "\" ")
       $modal.modal("show")
   })
})

$(function(){
    $modal = $('#modal-dialog')
   $('a.btn-masquer-billet').on('click',function(e){
       e.preventDefault()
       $modal.find('a#btnYes').attr('href',$(this).data('modalConfirmUrl'))
       $modal.find('.modal-body p').text("Etes vous sur de vouloir cacher \"" + $(this).data('billetTitle') + "\" ")
       $modal.modal("show")
   })
})

$(function(){
    $modal = $('#modal-dialog')
   $('a.btn-visible-billet').on('click',function(e){
       e.preventDefault()
       $modal.find('a#btnYes').attr('href',$(this).data('modalConfirmUrl'))
       $modal.find('.modal-body p').text("Etes vous sur de vouloir rendre visible \"" + $(this).data('billetTitle') + "\" ")
       $modal.modal("show")
   })
})

$(function(){
    $modal = $('#modal-dialog')
   $('a#lienSupprimerCommentaire').on('click',function(e){
       e.preventDefault()
       $modal.find('a#btnYes').attr('href',$(this).data('modalConfirmUrl'))
       $modal.find('.modal-body p').text("Etes vous sur de vouloir supprimer le commentaire")
       $modal.modal("show")
   })
})

$(function(){
    $modal = $('#modal-dialog')
   $('a#lienSupprimerUtilisateur').on('click',function(e){
       e.preventDefault()
       $modal.find('a#btnYes').attr('href',$(this).data('modalConfirmUrl'))
       $modal.find('.modal-body p').text("Etes vous sur de vouloir supprimer cet utilisateur ? ")
       $modal.modal("show")
   })
})

$(function(){
    $modal = $('#modal-dialog')
   $('a#lienDebanirUtilisateur').on('click',function(e){
       e.preventDefault()
       $modal.find('a#btnYes').attr('href',$(this).data('modalConfirmUrl'))
       $modal.find('.modal-body p').text("Etes vous sur de vouloir débanir cet utilisateur ? ")
       $modal.modal("show")
   })
})

$(function(){
    $modal = $('#modal-dialog')
   $('a#lienBanirUtilisateur').on('click',function(e){
       e.preventDefault()
       $modal.find('a#btnYes').attr('href',$(this).data('modalConfirmUrl'))
       $modal.find('.modal-body p').text("Etes vous sur de vouloir banir cet utilisateur ? ")
       $modal.modal("show")
   })
})

$(function(){
    $modal = $('#modal-dialog')
   $('a#lienBanirUtilisateurMode').on('click',function(e){
       e.preventDefault()
       $modal.find('a#btnYes').attr('href',$(this).data('modalConfirmUrl'))
       $modal.find('.modal-body p').text("Etes vous sur de vouloir retirer les droits de cet utilisateur ? ")
       $modal.modal("show")
   })
})

$(function(){
    $modal = $('#modal-dialog')
   $('a#lienPromoteModo').on('click',function(e){
       e.preventDefault()
       $modal.find('a#btnYes').attr('href',$(this).data('modalConfirmUrl'))
       $modal.find('.modal-body p').text("Etes vous sur de vouloir promouvoir Modérateur cet utilisateur ? ")
       $modal.modal("show")
   })
})

$(function(){
    $modal = $('#modal-dialog')
   $('a#lienBanirUtilisateurProm').on('click',function(e){
       e.preventDefault()
       $modal.find('a#btnYes').attr('href',$(this).data('modalConfirmUrl'))
       $modal.find('.modal-body p').text("Etes vous sur de vouloir promouvoir Administrateur cet utilisateur ? ")
       $modal.modal("show")
   })
})

$(function(){
    $modal = $('#modal-dialog')
   $('a#lienSupprimerSignalement').on('click',function(e){
       e.preventDefault()
       $modal.find('a#btnYes').attr('href',$(this).data('modalConfirmUrl'))
       $modal.find('.modal-body p').text("Etes vous sur de vouloir supprimer les signialements ? ")
       $modal.modal("show")
   })
})