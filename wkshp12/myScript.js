
/****************************************************
	date 08/05/2016
	author: Feilim Lawless
	***************************************************/ 

/*console.log('debug something')

var keepLooping = true;
		var i=1;
		while(keepLooping)
		{
			i++;
			console.log("i="+i+"<br>");
			if (i==10)
			{
				keepLooping = false;
			} 
		do
		{
			console.log("i="+i+"<br>");
			i++;
		}
		while (i<=10)
var myNumber = Math.floor(Math.random()*10);

console.log(myNumber)
*/

var human=100;
var computer=100;

function buttonOff(newtxt)
{
	
	var btn = document.getElementById("myBtn")
	 //disable button because game over
	btn.disabled=true;
	btn.innerHTML=newtxt; // changes text inside button tag
	console.log(btn.innerHTML);
}	

function attacked(player)
{
	//subtract 'random' number between 1-10 from player
	player -= Math.floor(Math.random()*10); 
	return player;
}

/*function battleRounds()
{
	
		//human's attack on computer
		computer = attacked(computer);
		console.log("computer : "+computer);
		
		if (computer <= 0)
		{
			alert ("Human wins!");
			changeButtonText("Game over");
		}


		//computer's attack on human
		if (computer > 0)
		{
				human = attacked(human);
				console.log("human : "+human);

				if (human <= 0)
				{
					alert ("Computer wins!")
					changeButtonText("Game over");
				}
		}
	*/

function battleRounds() //automated version
{
	do
	{
		console.log("human : "+human+" computer : "+computer);
	
	
		//human's attack on computer
		computer = attacked(computer);
		if (computer <= 0)
		{
			console.log("Human wins!");
		}
		else
		{
			//computer's attack on human
			human = attacked(human);
			
			if (human <= 0)
			{
				console.log("Computer wins!");
			}
		}
		
	}	
	while ((human > 0) && (computer > 0)) 

	console.log("FINAL SCORE - human : "+human+" computer : "+computer);	
	
	
	buttonOff("Game over");
	
}
		