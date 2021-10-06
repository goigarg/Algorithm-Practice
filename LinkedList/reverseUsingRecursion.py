class Node:
    def __init__(self, data):
        self.data = data
        self.next = None


class LinkedList:
    def __init__(self):
        self.head = None

    def add(self, data):
        if self.head is None:
            self.head = Node(data)
        else:
            temp = self.head
            self.head = Node(data)
            self.head.next = temp

    def reverse(self, node):
        if node.next is None:
            self.head = node
            return
        self.reverse(node.next)
        temp = node.next
        temp.next = node
        node.next = None

    def printList(self):
        if self.head is None:
            print("LinkedList is empty")
        else:
            temp = self.head
            while(temp):
                print(temp.data)
                temp = temp.next


llist = LinkedList()

for i in range(0, 5):
    llist.add(i)

llist.reverse(llist.head)
llist.printList()
