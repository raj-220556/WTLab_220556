// $(document).ready(function() {
//     // --- 1. Selectors ---
//     $("#btn-selectors").click(function() {
//         $(".sel-test p").css("color", "black"); // Reset
//         $("div > p").css("border", "1px solid red"); // Hierarchy: Parent > Child
//         $(".sel-test p:first").css("font-weight", "bold"); // Filter: :first
//         $(".sel-test p:even").addClass("highlight"); // Filter: :even
//         $("input[name^='user']").css("background", "#e1f5fe"); // Attribute: Starts with
//     });

//     // --- 2. Attributes ---
//     $("#change-attr").click(function() {
//         $("#lab-img").attr("src", "https://via.placeholder.com/150/0000FF");
//         $("#user-input").val("Raj Kumar N220556");
//         $("#check-me").prop("checked", true);
//     });

//     // --- 3. Events ---
//     $("#event-box").on("mouseenter", function() { $(this).css("background", "orange"); });
//     $("#event-box").on("mouseleave", function() { $(this).css("background", "#3498db"); });
    
//     $("#key-input").keyup(function() {
//         $("#key-msg").text("You typed: " + $(this).val());
//     });

//     $("#lab-form").submit(function(e) {
//         e.preventDefault();
//         alert("Form submitted successfully!");
//     });

//     // --- 4. Style Manipulation ---
//     $("#toggle-theme").click(function() {
//         $("body").toggleClass("dark-theme");
//         if($("body").hasClass("dark-theme")) {
//             $("body").css("background", "#333").css("color", "#fff");
//         } else {
//             $("body").css("background", "#f4f4f4").css("color", "#000");
//         }
//     });

//     // --- 5. Traversing ---
//     $("#run-traverse").click(function() {
//         $(".child").parent().css("border", "2px dashed green");
//         $(".parent").find(".target").css("background", "pink");
//         $(".target").next().css("color", "blue");
//     });

//     // --- 6. Effects & Animation ---
//     $("#btn-fade").click(function() { $(".box-fx").fadeToggle(1000); });
//     $("#btn-slide").click(function() { $(".box-fx").slideToggle(); });
    
//     $("#btn-animate").click(function() {
//         $(".box-fx").animate({
//             left: '+=200px',
//             opacity: '0.5',
//             height: '150px'
//         }, 2000).delay(1000).animate({ left: '0', opacity: '1', height: '100px' });
//     });

//     $("#btn-stop").click(function() { $(".box-fx").stop(true, true); });
// });

$(document).ready(function() {

    // --- TASK 1: SELECTORS ---
    $("#btn-apply-selectors").click(function() {
        // Basic & Hierarchy
        $("div#selector-demo p").css("color", "blue");
        $("ul.list-items > li").css("border-left", "5px solid green");
        
        // Filter Selectors
        $("ul.list-items li:first").css("background", "#eee");
        $("ul.list-items li:even").addClass("highlight");
        
        // Attribute Selectors
        $("input[name^='user']").css("border", "2px solid red");
    });

    // --- TASK 2: ATTRIBUTES ---
    $("#btn-attr-demo").click(function() {
        // attr() & val()
        $("#demo-img").attr("src", "./../../assets/images/samplelogo2.png");
        let currentVal = $("#attr-input").val();
        alert("Input Value is: " + currentVal);
        
        // prop() & removeAttr()
        $("#demo-check").prop("checked", true);
        $("#attr-input").removeAttr("placeholder");
    });

    // --- TASK 3: EVENTS ---
    $("#click-btn").click(function() { alert("Button Clicked!"); });
    $("#click-btn").dblclick(function() { $(this).text("Double Clicked!"); });
    
    $("#hover-box").hover(
        function() { $(this).css("background", "red").text("In!"); },
        function() { $(this).css("background", "#3498db").text("Out!"); }
    );

    $("#key-input").keyup(function() {
        $("#key-status").text("Typing: " + $(this).val());
    });

    $("#lab-form").on("submit", function(e) {
        e.preventDefault();
        alert("Form submitted safely!");
    });

    // --- TASK 4: STYLE MANIPULATION ---
    $("#btn-add-class").click(function() { $("#style-text").addClass("highlight"); });
    $("#btn-remove-class").click(function() { $("#style-text").removeClass("highlight"); });
    $("#btn-toggle-theme").click(function() { $("body").toggleClass("dark-theme"); });

    // --- TASK 5: TRAVERSING ---
    $("#btn-traverse").click(function() {
        // Parent/Child
        $("span").parent().css({"color": "red", "border": "2px solid red"});
        $(".ancestor").find("span").css("background", "yellow");
        
        // Siblings
        $("h2").next().css("text-decoration", "underline");
    });

    // --- TASK 6 & 7: EFFECTS & ANIMATION ---
    $("#btn-show-hide").click(function() { $(".box-fx").toggle(500); });
    $("#btn-fade").click(function() { $(".box-fx").fadeToggle(1000); });
    $("#btn-slide").click(function() { $(".box-fx").slideToggle(); });
    
    $("#btn-animate").click(function() {
        $(".box-fx").animate({
            left: '250px',
            opacity: '0.5',
            height: '150px',
            width: '150px'
        }, 2000).delay(500).animate({
            left: '0px',
            opacity: '1',
            height: '120px',
            width: '120px'
        });
    });

    $("#btn-stop").click(function() {
        $(".box-fx").stop(true, true);
    });
});