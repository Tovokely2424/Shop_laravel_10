<x-admin-layout title="Administration de mes produits">
    <x-tableproduct :$products/>
    @section('script')
    <script>
        $(document).ready(function() {
            $('#detailproduit').click(function(event) {
                event.preventDefault();
                
                const contextMenu = $('#contextMenu');
                contextMenu.toggle();
                const buttonPosition = $(this).offset();
                const buttonWidth = $(this).outerWidth();
                const buttonHeight = $(this).outerHeight();
                const menuLeft = buttonPosition.left + buttonWidth;
                const menuTop = buttonPosition.top + buttonHeight;
                alert(menuTop);
                contextMenu.css({ top: menuTop, left: menuLeft });
            });

            $(document).on('click', function(event) {
                const contextMenu = $('#contextMenu');
                if (!$(event.target).closest('#contextMenu').length && !$(event.target).is('#detailproduit')) {
                contextMenu.hide();
                }
            });
        });

            // Fonctions pour gérer l'édition et la suppression
            function editItem() {
            console.log('Editer');
            $('#contextMenu').hide();
            }

            function deleteItem() {
            console.log('Supprimer');
            $('#contextMenu').hide();
            }

    </script>
    @endsection
</x-admin-layout>
