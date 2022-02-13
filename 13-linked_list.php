<?php 

/**
 * node
 */
class Node
{

	public $value=null;
	public $next=null;
	public $pre=null;
	function __construct($value=null,$pre=null,$next=null)
	{
		$this->value = $value;
		$this->next = $next;
		$this->pre = $pre;
	}
}

 // $node1 = new Node(1);
 // $node2 = new Node(2,$node1);
 // $node1->next = $node2;
 
 // echo $node1->next->next;


 ?>

<?php 
/**
 * Linked list
 */
class LinkedList
{
	public $firstNode = null;
	public $lastNode = null;

	
	// function __construct()
	// {
		
	// }

	public function add_end($value=null){

		if (!$this->firstNode && !$this->lastNode) {
			$node = new Node($value,$this->lastNode);
			$this->firstNode = $node;
			$this->lastNode = $node;
		}else{
			$node = new Node($value,$this->lastNode);
			$this->lastNode->next = $node;
			$this->lastNode = $node;
		}
		return $this;

	}
	// O(1)
	// update first node
	// update last node
	// O(n)
	//update node by index
	
}	

$linked = new LinkedList();

$linked->add_last(1)->add_last(2)->add_last(3);

echo $linked->firstNode->next->next->next;
echo $linked->lastNode->pre->pre->pre;

 ?>



