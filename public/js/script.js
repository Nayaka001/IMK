// $(function ()
// {
//     const username = /(?=.*[a-zA-Z])(?=.*\d)[A-Za-z\d@$!%*?&]{10,15}$/;
//     const password = /(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    
//     $('input').each(function ()
//     {
//         $(this).on('input', function ()
//         {
//             const pElement = $(this).siblings().filter('p');

//             if ($(this).attr('id') == "username")
//             {
//                 if (username.test($(this).val()))
//                 {
//                     $(this).removeClass('focus:ring-sky-500 focus:border-sky-500 focus:ring-red-500 focus:border-red-300')
//                     $(this).addClass('focus:ring-green-500 focus:border-green-300')
                    
//                     pElement.html('Username tepat')
//                     pElement.removeClass('text-red-700')
//                     pElement.addClass('text-green-700')

//                     $('#submitBtn').attr('type', 'submit');
//                 }
//                 else
//                 {
//                     $(this).removeClass('focus:ring-sky-500 focus:border-sky-500 focus:ring-green-500 focus:border-green-300')
//                     $(this).addClass('focus:ring-red-500 focus:border-red-300')

//                     pElement.html('Username belum tepat')
//                     pElement.removeClass('text-green-700')
//                     pElement.addClass('text-red-700')

//                     $('#submitBtn').attr('type', 'button');
                    
//                 }
//             }
//             else if ($(this).attr('id') == "password")
//             {
//                 if (password.test($(this).val()))
//                 {
//                     // $(this).removeClass('focus:ring-gray-300 focus:ring-rose-400')
//                     // $(this).addClass("focus:ring-emerald-400")

//                     $(this).removeClass('focus:ring-sky-500 focus:border-sky-500 focus:ring-red-500 focus:border-red-300')
//                     $(this).addClass('focus:ring-green-500 focus:border-green-300')

//                     pElement.html('Password tepat')
//                     pElement.removeClass('text-red-700')
//                     pElement.addClass('text-green-700')

//                     $('#submitBtn').attr('type', 'submit');
//                     // pElement.removeClass('text-indigo-300')
//                     // pElement.addClass('text-emerald-300')
//                 }
//                 else
//                 {
//                     // $(this).removeClass('focus:ring-indigo-500 focus:ring-emerald-400')
//                     // $(this).addClass("focus:ring-rose-400")
//                     $(this).removeClass('focus:ring-sky-500 focus:border-sky-500 focus:ring-green-500 focus:border-green-300')
//                     $(this).addClass('focus:ring-red-500 focus:border-red-300')

//                     pElement.html('Password belum tepat')
//                     pElement.removeClass('text-green-700')
//                     pElement.addClass('text-red-700')

//                     $('#submitBtn').attr('type', 'button');
//                     // pElement.removeClass('text-indigo-300 text-emerald-300')
//                     // pElement.addClass('text-rose-300')
//                 }
//             }
            
//         })
//     })
    
// })


