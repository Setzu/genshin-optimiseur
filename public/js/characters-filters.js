$(function () {

    $('button.btn-filters').click(function () {
        let _id = $(this).data('id')
        let _name = $(this).data('name')
        let _tr = $('tr.' + _name + '-' + _id);

        // Attribue la classe visible si le bouton est cliqué
        if ($(this).hasClass('clicked')) {
            $(this).removeClass('clicked')
            $(this).find('img').css('opacity', 1)
            $(this).find('svg').css('opacity', 1)
            _tr.addClass(_name + '-visible');
        } else {
            $(this).addClass('clicked')
            $(this).find('img').css('opacity', 0.3)
            $(this).find('svg').css('opacity', 0.3)
            _tr.removeClass(_name + '-visible');
        }

        // Affiche les tr si elles ont bien les 3 classes visibles
        _tr.each(function() {
            if ($(this).hasClass('element-visible') && $(this).hasClass('rank-visible') && $(this).hasClass('weapon-visible')) {
                $(this).show();
            } else {
                $(this).hide();
                // Cache la tr détails si elle est visible
                if ($(this).next().is(':visible')) {
                    $(this).next().hide();
                }
            }
        });
    })

    $('button#reset-filters').click(function () {
        $('button.btn-filters').each(function () {
            if ($(this).hasClass('clicked')) {
                $(this).click()
            }
        })
    })

    /*
    // tri des colonnes
    let _sortCharactersTable = function sortTable(n) {
        let table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
        table = document.getElementById("characters-table");
        switching = true;
        // Set the sorting direction to ascending:
        dir = "asc";
        // Make a loop that will continue until no switching has been done:
        while (switching) {
            // Start by saying: no switching is done:
            switching = false;
            rows = table.rows;
            // Loop through all table rows (except the first, which contains table headers):
            for (i = 1; i < (rows.length - 1); i++) {
                // Start by saying there should be no switching:
                shouldSwitch = false;
                // Get the two elements you want to compare, one from current row and one from the next:
                x = rows[i].getElementsByTagName("TD")[n];
                y = rows[i + 1].getElementsByTagName("TD")[n];
                // Check if the two rows should switch place, based on the direction, asc or desc:
                if (dir == "asc") {
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        // If so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }
                } else if (dir == "desc") {
                    if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                        // If so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }
                }
            }
            if (shouldSwitch) {
                // If a switch has been marked, make the switch and mark that a switch has been done:
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
                // Each time a switch is done, increase this count by 1:
                switchcount ++;
            } else {
                // If no switching has been done AND the direction is "asc", set the direction to "desc" and run the while loop again.
                if (switchcount == 0 && dir == "asc") {
                    dir = "desc";
                    switching = true;
                }
            }
        }
    }

    _sortCharactersTable(0)

    // Ajout des icones
    $('th.th-sort').click(function () {
        $('th.th-sort > img').remove()
        _sortCharactersTable($(this).data('column'))

        if ($(this).hasClass('sort-desc')) {
            $(this).addClass('sort-asc').removeClass('sort-desc').
            prepend('<img class="icon-up" src="/img/icons/caret-up-fill.svg" alt=""/>')
        } else if($(this).hasClass('sort-asc')) {
            $(this).addClass('sort-desc').removeClass('sort-asc').
            prepend('<img class="icon-up" src="/img/icons/caret-down-fill.svg" alt=""/>')
        } else {
            $(this).addClass('sort-asc').
            prepend('<img class="icon-up" src="/img/icons/caret-up-fill.svg" alt=""/>')
        }
    })
    */
});