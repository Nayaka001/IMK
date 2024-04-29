$(function ()
{
    const username = /(?=.*[a-zA-Z])(?=.*\d)[A-Za-z\d@$!%*?&]{10,15}$/;
    const password = /(?=.*[a-z])(?=.*[A-Z]).{8,}$/;

    $('input').each(function ()
    {
        $(this).on('input', function ()
        {
            const pElement = $(this).siblings().filter('p');

            
            if ($(this).attr('id') == "username")
            {
                if (username.test($(this).val()))
                {
                    pElement.html('Username tepat')
                    $('#submitBtn').attr('type', 'submit');
                }
                else
                {
                    pElement.html('Username belum tepat')
                    $('#submitBtn').attr('type', 'button');
                    
                }
            }
            else if ($(this).attr('id') == "password")
            {
                if (password.test($(this).val()))
                {
                    // $(this).removeClass('focus:ring-gray-300 focus:ring-rose-400')
                    // $(this).addClass("focus:ring-emerald-400")

                    pElement.html('Password tepat')
                    $('#submitBtn').attr('type', 'submit');
                    // pElement.removeClass('text-indigo-300')
                    // pElement.addClass('text-emerald-300')
                }
                else
                {
                    // $(this).removeClass('focus:ring-indigo-500 focus:ring-emerald-400')
                    // $(this).addClass("focus:ring-rose-400")

                    pElement.html('Password belum tepat')
                    $('#submitBtn').attr('type', 'button');
                    // pElement.removeClass('text-indigo-300 text-emerald-300')
                    // pElement.addClass('text-rose-300')
                }
            }
            
        })
    })
})
