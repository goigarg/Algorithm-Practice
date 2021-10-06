class Node:
    def __init__(self, data):
        self.data = data
        self.left = None
        self.right = None


def printTree(node):
    if(node is not None):
        print(node.data)
        printTree(node.left)
        printTree(node.right)


first = Node(1)
first.left = Node(2)
first.right = Node(3)
first.right.left = Node(4)
first.right.right = Node(5)

printTree(first)
