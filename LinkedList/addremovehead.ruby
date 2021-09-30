class Node
    attr_accessor :next
    attr_reader :data
    def initialize data
        @data = data
        @next = nil
    end
end


class LinkedList
    attr_accessor :head
    def initialize
        @head = nil
    end
    def add data
        temp = @head
        @head = Node.new(data)
        @head.next = temp
    end
    
    def delete
        @head = @head.next
    end

    def printList
        temp = @head
        while temp
            puts temp.data
            temp = temp.next
        end
    end
end


list = LinkedList.new()

for i in 1..5
    list.add(i)
end

list.delete

list.printList