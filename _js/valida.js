function validar(f,n)  // f é o formulário, n é o número de termos do formulário.
{
	for(var c=0;c<n;c++)
	{
			if(f.elements[c].value=="")
			{
				alert("O campo não pode ficar em branco!");
				f.elements[c].focus;
				return false;
			}
	}
	
	return true;
}