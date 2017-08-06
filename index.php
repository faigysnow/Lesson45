<html>
<head>
</head>
<body>
    <script>
    'use strict'
        var a = '<?php echo '[{"name": "name1", "age":15},{"name": "sharlok", "age":45},{"name": "pnini", "age":27},{"name": "bertok", "age":67}]'; ?>';
        
        var PersonParse = JSON.parse(a);
        var persons = [];
         
         for (let i=0; i<persons.length; i++){
            persons.push(new person(PersonParse[i].name, PersonParse[i].age));
           }
       //constructor
       function person (p_name, p_age){
        this.name = p_name;
        this.age = p_age;
      
             }
        
       console.log(persons); 

       var obj = new Persons ('faigy' , 'snow')
       console.log(obj);
        var fullName;
        var Id;
        var lastName;
        var firstName;
        Object.defineProperty(firstName, lastName {
            writable: true,
            configurable: false,
            value: 5,
            enumerable: true  
        });

        Object.defineProperty(Id{
            writable: false,
            configurable: false,
            value: 5,
            enumerable: true  
        });
        
        
        console.log(firstName + " " + lastName + " " + Id);
        
        console.log(fullName);

        y.firstName = "Faigy";
        y.lastName = "Snow";

        Object.defineProperty(id, 'fullName', {
            get: function() { return this.firstName + " " + this.lastName; },
            set: function() { 
                this.firstName = fullName.split(' ')[0];
                this.lastName = fullName.split(' ')[1];
             }
        });
    </script>
</body>
</html>